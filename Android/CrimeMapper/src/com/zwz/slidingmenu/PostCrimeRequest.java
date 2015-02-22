package com.zwz.slidingmenu;

import java.util.List;

import com.zwz.slidingmenu.R;

import android.app.Fragment;
import android.content.Intent;
import android.os.Bundle;
import android.support.v4.view.ViewPager;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

public class PostCrimeRequest extends Fragment {
	
	 Button btn1,btn2,btn3;
	public PostCrimeRequest(){}
	
	@Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
            Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.post_crime, container, false);
        btn1 = (Button)getActivity().findViewById(R.id.button1);
        btn2 = (Button)getActivity().findViewById(R.id.button2);
        btn3 = (Button)getActivity().findViewById(R.id.button3);
   
			
		
        return rootView;
    }
}
