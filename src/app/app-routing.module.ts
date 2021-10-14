import {NgModule} from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AboutComponent } from './about.component';
import { LoginComponent } from './login.component';
import { SignupComponent} from './signup.component';
import { CreateBusnissComponent} from './create-busniss.component';
import { SurfBusinessComponent } from './surf-business.component';


const routes: Routes =[
  {path:'login',component: LoginComponent},
  {path:'about',component:AboutComponent},
  {path:'sighnup',component:SignupComponent},
  {path:'create-busniss',component:CreateBusnissComponent},
  {path: 'surf-business',component:SurfBusinessComponent}
  
];

@NgModule({
  
  imports: [RouterModule.forRoot(routes)],
  
  exports:[RouterModule]

})
export class AppRoutingModule{}
export const routingComponetns =[ LoginComponent ]