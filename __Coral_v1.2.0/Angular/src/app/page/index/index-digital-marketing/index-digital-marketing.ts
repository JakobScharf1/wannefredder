import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navlight } from "../../../components/navbar/navlight/navlight";
import { ServicesOne } from "../../../components/services-one/services-one";
import { AboutImage } from "../../../components/about-image/about-image";
import { counterData, portfolioOne } from '../../../../data/data';
import { CountUpModule } from 'ngx-countup';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { TeamOne } from "../../../components/team-one/team-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { Footer } from "../../../components/footer/footer";

interface Project{
  image: string;
  title: string;
  name: string;
}

@Component({
  selector: 'app-index-digital-marketing',
  imports: [
    CommonModule,
    RouterLink,
    Navlight,
    ServicesOne,
    AboutImage,
    CountUpModule,
    CtaTwo,
    FaqOne,
    TeamOne,
    BlogOne,
    Footer
],
  templateUrl: './index-digital-marketing.html',
  styleUrl: './index-digital-marketing.scss'
})
export class IndexDigitalMarketing {
  partner  = [
    'assets/images/client/amazon.svg',
    'assets/images/client/google.svg',
    'assets/images/client/lenovo.svg',
    'assets/images/client/paypal.svg',
    'assets/images/client/shopify.svg',
    'assets/images/client/spotify.svg',
    'assets/images/client/amazon.svg',
    'assets/images/client/google.svg',
    'assets/images/client/lenovo.svg',
    'assets/images/client/paypal.svg',
    'assets/images/client/shopify.svg',
    'assets/images/client/spotify.svg',
  ]

  counterData = counterData.slice(0,3)

  project:Project[] = portfolioOne
}
