<?php

class AccountController extends BaseController
{
    public function getSignUp()
    {
            return View::make('Accounts.signup');
    }


    public function postSignUp()
    {
        require_once(app_path().'/includes/api_class.php');
        $data=Input::all();
        $validator=Validator::make($data,User::$auth_rules);
        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else {

            $data=Input::all();
            $code=mt_rand(10000,99999);

            $data['password']=Hash::make($data['password']);
            $data['code']=$code;

            $user=User::create($data);

            $victim=Victim::create($data);
            $victim->user_id=$user->id;
            $victim->save();

            if($user)
            {
                $object_smile_api->send_sms($data['phone'],'8333',$code);
                return Redirect::route('user.activate')->with('global','Code has been send too the mobile number');

            }


        }
        return Redirect::route('user.signup');
    }




    public function getActivate()
    {
        return View::make('Accounts.validate');
    }
    public function postActivate()
    {
        $user=User::where('code','=',Input::get('code'))->where('active','=',0);
        if($user->count())
        {
            $user=$user->first();
            $user->active=1;
            $user->code='';
            if($user->save())
            {
                return Redirect::route('user.signup')->with('global','We have successfully activated your account');
            }



        }
        return Redirect::route('user.activate')->with('global','there was an error activating your account');
    }

    public function getSignIn()
    {
        return View::make('Accounts.signIn');
    }

    public function  postSignIn()
    {
        $validator=Validator::make(Input::all(),array(
            'email' => 'required | email',
            'password' => 'required'

        ));

        if($validator->fails())
        {
            return Redirect::route('user.signin')
                ->withErrors($validator)
                ->withInput();
        }
        else
        {


            $auth=Auth::attempt(array(
                'email' =>Input::get('email'),
                'password' =>Input::get('password'),
                'active' => 1

            ));

            if($auth)
            {
                return Redirect::intended('/user/profile');

            }
            else
            {
                return Redirect::route('user.signin')
                    ->with('global','There was an error signing in, check email/password or if teh account is activated');

            }


        }

        return Redirect::route('account-sign-in')
            ->with('global','There was an error signing in');

    }


    public function getSignOut()

    {
        Auth::logout();
        return Redirect::route('user.signin');

    }

}

