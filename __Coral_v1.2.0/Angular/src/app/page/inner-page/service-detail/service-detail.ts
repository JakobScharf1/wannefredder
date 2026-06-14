import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';

import { servicesData } from '../../../../data/data';

import { FaqOne } from "../../../components/faq-one/faq-one";
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-service-detail',
  imports: [
    RouterLink,
    CommonModule,
    Navdark,
    FaqOne,
    Footer
],
  templateUrl: './service-detail.html',
  styleUrl: './service-detail.scss'
})
export class ServiceDetail {
  services = servicesData
}
