// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";

import { tns } from 'tiny-slider/src/tiny-slider';
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-portfolio-detail',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './portfolio-detail.html',
  styleUrl: './portfolio-detail.scss'
})
export class PortfolioDetail {
 ngAfterViewInit(): void {
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
