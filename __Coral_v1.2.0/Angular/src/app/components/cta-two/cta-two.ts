// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { clientData } from '../../../data/data';

import { tns } from 'tiny-slider/src/tiny-slider';

interface ClientData{
  tag: string;
  image: string;
  rate: string[];
  desc: string;
  name: string;
  position: string;
}

@Component({
  selector: 'app-cta-two',
  imports: [
    CommonModule,
  ],
  templateUrl: './cta-two.html',
  styleUrl: './cta-two.scss'
})
export class CtaTwo {
  clientData:ClientData[] = clientData
  
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
