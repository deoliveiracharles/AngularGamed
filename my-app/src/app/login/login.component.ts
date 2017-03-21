import { Component, OnInit } from '@angular/core';
import { Http, Response } from '@angular/http';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

 ngOnInit() {
    alert("a");
  }
 /* username: '';
  data;

  constructor(private http:Http){
  }

  getData(){
      this.http.get('../src/php/createAccount.php')
          .subscribe(res => this.data = res.json());
  }

  ngOnInit() {
    alert(this.getData());
  }

  onSubmit() { 
     
  }*/

}
