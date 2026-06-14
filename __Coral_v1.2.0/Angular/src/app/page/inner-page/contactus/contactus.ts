import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-contactus',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './contactus.html',
  styleUrl: './contactus.scss'
})
export class Contactus {

}
