import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { Footer } from "../../../components/footer/footer";
import { FaqOne } from "../../../components/faq-one/faq-one";

@Component({
  selector: 'app-faqs',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer,
    FaqOne
],
  templateUrl: './faqs.html',
  styleUrl: './faqs.scss'
})
export class Faqs {

}
