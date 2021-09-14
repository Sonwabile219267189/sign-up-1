import {NgModule} from '@angular/core';
import { Component } from '@angular/core';
import {MatGridListModule} from '@angular/material/grid-list';
import {MatButtonModule} from '@angular/material/button';
import {MatFormFieldModule, MAT_FORM_FIELD_DEFAULT_OPTIONS} from '@angular/material/form-field';


@NgModule({
imports:[
  MatButtonModule,
    MatFormFieldModule,
    MatGridListModule
]
})
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
