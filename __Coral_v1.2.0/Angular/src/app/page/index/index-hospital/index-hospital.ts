import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

import Swiper from 'swiper';
import { Autoplay, EffectFade, Pagination} from 'swiper/modules';

import { drTeam, hospitalServices } from '../../../../data/data';

import { Navdark } from "../../../components/navbar/navdark/navdark";
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { DrTimetable } from "../../../components/dr-timetable/dr-timetable";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { Footer } from "../../../components/footer/footer";

interface Services{
  image: string;
  title: string;
  desc: string;
}

interface Team{
  image: string;
  name: string;
  position: string;
  social: string[];
}

@Component({
  selector: 'app-index-hospital',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    CtaTwo,
    DrTimetable,
    BlogOne,
    Footer
],
  templateUrl: './index-hospital.html',
  styleUrl: './index-hospital.scss'
})
export class IndexHospital {

  ngAfterViewInit(): void {
     new Swiper('.swiper-container', {
      modules: [Autoplay, EffectFade,Pagination],
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
      speed:3000,
      loop:true,
      
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }

  services:Services[] = hospitalServices

  teamData:Team[] = drTeam
}
