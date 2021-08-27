import {NgModule} from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AboutComponent } from './about.component';
import { LoginComponent } from './login.component';
import { SignupComponent} from './signup.component';

const routes: Routes =[
  {path:'login',component: LoginComponent},
  {path:'',component:AboutComponent},
  {path:'sighnup',component:SignupComponent}
  
];

@NgModule({
  
  imports: [RouterModule.forRoot(routes)],
  
  exports:[RouterModule]

})
export class AppRoutingModule{}
export const routingComponetns =[ LoginComponent ]