import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { PricingOne } from "../../../components/pricing-one/pricing-one";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-pricing',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    FaqOne,
    PricingOne,
    Footer
],
  templateUrl: './pricing.html',
  styleUrl: './pricing.scss'
})
export class Pricing {

}
