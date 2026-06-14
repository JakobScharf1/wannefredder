// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { clientData } from '../../../data/data';
import { tns } from 'tiny-slider/src/tiny-slider';

interface Client{
  tag: string;
  image: string;
  rate: string[];
  desc: string;
  name: string;
  position: string;
}

@Component({
  selector: 'app-client-one',
  imports: [
    CommonModule,
  ],
  templateUrl: './client-one.html',
  styleUrl: './client-one.scss'
})
export class ClientOne {
  clientData:Client[] = clientData

  ngAfterViewInit(): void {
    tns({
        container: '.tiny-three-item',
        controls: false,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        nav:false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        speed: 400,
        gutter: 12,
        responsive: {
            992: {
                items: 3
            },

            767: {
                items: 2
            },

            320: {
                items: 1
            },
        },
    });
  }
}
