import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-terms',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    FaqOne,
    Footer
],
  templateUrl: './terms.html',
  styleUrl: './terms.scss'
})
export class Terms {

}
