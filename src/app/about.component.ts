import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']

})
export class AboutComponent {

  goToPage = function (pageName:string){
    this.router.navigate([`${pageName}`]);
  }

  title = 'About';
}
