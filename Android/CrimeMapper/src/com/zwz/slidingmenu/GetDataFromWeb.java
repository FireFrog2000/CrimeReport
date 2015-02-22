package com.zwz.slidingmenu;

import android.app.ProgressDialog;
import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

public class GetDataFromWeb {
	private String urlJsonObj = "http://api.androidhive.info/volley/person_object.json";
    
    // json array response url
    private String urlJsonArry = "http://api.androidhive.info/volley/person_array.json";
 
    private static String TAG = MainActivity.class.getSimpleName();
    private Button btnMakeObjectRequest, btnMakeArrayRequest;
    private ProgressDialog pDialog;
    private TextView txtResponse;
    private String jsonResponse;
 
}
