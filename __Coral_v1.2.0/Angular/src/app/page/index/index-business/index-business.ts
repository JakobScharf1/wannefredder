// @ts-nocheck 
import { Component } from '@angular/core';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { clientData, counterData, portfolioOne, servicesData } from '../../../../data/data';
import * as feather from 'feather-icons';
import { CountUpModule } from 'ngx-countup';
import { AboutImage } from "../../../components/about-image/about-image";
import { TeamOne } from "../../../components/team-one/team-one";

import { tns } from 'tiny-slider/src/tiny-slider';
import { BlogOne } from "../../../components/blog-one/blog-one";
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

interface Project{
  image: string;
  title: string;
  name: string;
}

interface Client{
  tag: string;
  image: string;
  rate: string[];
  desc: string;
  name: string;
  position: string;
}

@Component({
  selector: 'app-index-business',
  imports: [
    Navdark,
    CommonModule,
    RouterLink,
    CountUpModule,
    AboutImage,
    TeamOne,
    BlogOne,
    Footer
],
  templateUrl: './index-business.html',
  styleUrl: './index-business.scss'
})
export class IndexBusiness {
  services:Services[] = servicesData.slice(0,3)

  counter:Counter[] = counterData.slice(0,3)

  project:Project[] = portfolioOne.slice(0,6)

  clientData:Client[] = clientData

   ngAfterViewInit(): void {
      feather.replace();

      tns({
          container: '.tiny-single-item',
          items: 1,
          controls: false,
          mouseDrag: true,
          loop: true,
          rewind: true,
          autoplay: true,
          autoplayButtonOutput: false,
          autoplayTimeout: 3000,
          nav:false,
          speed: 400,
          gutter: 0,
      });
    }
}
