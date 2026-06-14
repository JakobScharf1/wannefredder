import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

import { HostingNavbar } from "../../../components/navbar/hosting-navbar/hosting-navbar";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { PricingOne } from "../../../components/pricing-one/pricing-one";
import { ClientOne } from "../../../components/client-one/client-one";
import { Footer } from "../../../components/footer/footer";

import { counterData } from '../../../../data/data';
import { CountUpModule } from 'ngx-countup';

interface Counter{
  icon: string;
  title: string;
  value: number;
  symbol: string;
}

interface Service{
  image: string;
  title: string;
  value: string;
}

@Component({
  selector: 'app-index-web-hosting',
  imports: [
    CommonModule,
    RouterLink,
    HostingNavbar,
    FaqOne,
    PricingOne,
    ClientOne,
    CountUpModule,
    Footer
],
  templateUrl: './index-web-hosting.html',
  styleUrl: './index-web-hosting.scss'
})
export class IndexWebHosting {
  counter:Counter[] = counterData.slice(0,3)

  services:Service[] = [
    {
      image:'assets/images/hosting/1.png',
      title:'Shared Hosting',
      value:'Starting $2.99/month'
    },
    {
      image:'assets/images/hosting/2.png',
      title:'VPS Hosting',
      value:'Starting $2.99/month'
    },
    {
      image:'assets/images/hosting/3.png',
      title:'Dedicated Server',
      value:'Starting $2.99/month'
    },
    {
      image:'assets/images/hosting/4.png',
      title:'Cloud Hosting',
      value:'Starting $2.99/month'
    },
    {
      image:'assets/images/hosting/5.png',
      title:'Reseller Hosting',
      value:'Starting $2.99/month'
    },
  ]
}
