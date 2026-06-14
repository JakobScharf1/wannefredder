import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-privacy',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './privacy.html',
  styleUrl: './privacy.scss'
})
export class Privacy {

}
