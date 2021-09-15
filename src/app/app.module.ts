import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import {MatGridListModule} from '@angular/material/grid-list';
import {MatButtonModule} from '@angular/material/button';
import {MatFormFieldModule, MAT_FORM_FIELD_DEFAULT_OPTIONS} from '@angular/material/form-field';
import { LoginComponent } from './login.component';
import { AboutComponent } from './about.component';
import {AppRoutingModule ,routingComponetns} from './app-routing.module';
import { SignupComponent} from './signup.component';
import { CreateBusnissComponent} from './create-busniss.component';


@NgModule({
  declarations: [
    LoginComponent,
    AppComponent,
    AboutComponent,
    SignupComponent,
    CreateBusnissComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MatButtonModule,
    MatFormFieldModule,
    MatGridListModule,
    
    AppRoutingModule
  ],

  providers: [],
  bootstrap: [AppComponent]

})
export class AppModule { }
