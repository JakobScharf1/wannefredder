// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navlight } from "../../../components/navbar/navlight/navlight";

import { tns } from 'tiny-slider/src/tiny-slider';
import {NgxTypedJsModule} from 'ngx-typed-js';
import { counterData, yogaTeam } from '../../../../data/data';
import { CountUpModule } from 'ngx-countup';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { YogaTimetable } from "../../../components/yoga-timetable/yoga-timetable";
import { Footer } from "../../../components/footer/footer";

interface Counter{
  icon: string;
  title: string;
  value: number;
  symbol: string;
}

interface Asan{
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
  selector: 'app-index-yoga',
  imports: [
    CommonModule,
    RouterLink,
    Navlight,
    NgxTypedJsModule,
    CountUpModule,
    CtaTwo,
    FaqOne,
    BlogOne,
    YogaTimetable,
    Footer
],
  templateUrl: './index-yoga.html',
  styleUrl: './index-yoga.scss'
})
export class IndexYoga {
  ngAfterViewInit(): void {
    tns({
        container: '.tiny-single-item-no-nav',
        items: 1,
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        navPosition: "bottom",
        nav: false,
        speed: 400,
        gutter: 16,
    });
  }

  counter:Counter[] = counterData.slice(0,3)
  team:Team[] = yogaTeam

  asan:Asan[] = [
    {
      image:'assets/images/asana/ardha_padmasana.png',
      title:'Ardha Padmasana',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
      image:'assets/images/asana/bhujangasana.png',
      title:'Bhujangasana',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
      image:'assets/images/asana/halasana.png',
      title:'Halasana',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
      image:'assets/images/asana/natarajasana.png',
      title:'Natarajasana',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
  ]
}
