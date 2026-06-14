import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import {NgxTypedJsModule} from 'ngx-typed-js';

import { CountUpModule } from 'ngx-countup';
import { counterData, servicesData } from '../../../../data/data';

import { NavTagline } from "../../../components/navbar/nav-tagline/nav-tagline";
import { AboutImage } from "../../../components/about-image/about-image";
import { CtaOne } from "../../../components/cta-one/cta-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { TeamOne } from "../../../components/team-one/team-one";
import { PricingOne } from "../../../components/pricing-one/pricing-one";
import { Footer } from "../../../components/footer/footer";

interface Services{
  icon: string;
  title: string;
  desc: string;
}

interface Counter{
  icon: string;
  title: string;
  value: number;
  symbol: string;
}

@Component({
  selector: 'app-index-it-solution',
  imports: [
    CommonModule,
    RouterLink,
    NavTagline,
    NgxTypedJsModule,
    AboutImage,
    CountUpModule,
    CtaOne,
    BlogOne,
    FaqOne,
    TeamOne,
    PricingOne,
    Footer
],
  templateUrl: './index-it-solution.html',
  styleUrl: './index-it-solution.scss'
})
export class IndexItSolution {
  services:Services[] = servicesData.slice(0,4)
  counter:Counter[]  = counterData.slice(0,3)
}
