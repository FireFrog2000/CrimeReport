package com.zwz.slidingmenu;

import com.zwz.slidingmenu.R;
import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

public class MyRequests extends Fragment {
	
	public MyRequests(){}
	
	@Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
            Bundle savedInstanceState) {
 
        View rootView = inflater.inflate(R.layout.my_request, container, false);
         
        return rootView;
    }
}
