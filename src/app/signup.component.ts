import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './signup.component.html',
   styleUrls: ['./signup.component.css']

})
export class SignupComponent {

  goToPage = function (pageName:string){
    this.router.navigate([`${pageName}`]);
  }

  title = 'Sighnup';
}
