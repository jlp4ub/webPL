import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],

})
export class AppComponent {
	classes=['Accounting (ACCT)','Biology (BIO)', 'Chemistry (CHEM)'
        ];
    marked = false;
    theCheckbox = false;
    name = "Ashley";
    base="0";

    constructor(){

    }
    toggleVisibility(e){
    	this.marked= e.target.checked;
  	}
    
    



}
