// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

import { cryptoData } from '../../../../data/data';

import { tns } from 'tiny-slider/src/tiny-slider';

import { Navdark } from "../../../components/navbar/navdark/navdark";
import { ClientOne } from "../../../components/client-one/client-one";
import { Footer } from "../../../components/footer/footer";

interface Crypto{
  image: string;
  name1: string;
  name2: string;
  price: string;
  change1: string;
  change2: string;
  marketCap: string;
  text: string;
  bg: string;
}

interface Trader{
  image: string;
  title: string;
  desc: string;
  btn: string;
}

@Component({
  selector: 'app-index-cryptocurrency',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    ClientOne,
    Footer
],
  templateUrl: './index-cryptocurrency.html',
  styleUrl: './index-cryptocurrency.scss'
})
export class IndexCryptocurrency {
  cryptoData:Crypto[] = cryptoData

   ngAfterViewInit(): void {
    tns({
        container: '.tiny-three-item-icon',
        controls: true,
        mouseDrag: true,
        loop: true,
        rewind: true,
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 3000,
        navPosition: "bottom",
        controlsText: ['<i class="mdi mdi-chevron-left "></i>', '<i class="mdi mdi-chevron-right"></i>'],
        nav: false,
        speed: 400,
        gutter: 0,
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

  trader:Trader[] = [
    {
      image:'assets/images/cpu.svg',
      title:'Buy & Sell Crypto',
      desc:'Buy or sell Bitcoin, Ethereum, and other crypto assets with your credit card, debit card, or bank account.',
      btn:'Buy Bitcoin'
    },
    {
      image:'assets/images/analytics.svg',
      title:'Trade Assets',
      desc:'Discover new and innovative crypto assets with over 200 spot trading pairs and 25 margin trading pairs.',
      btn:'View Exchange'
    },
    {
      image:'assets/images/exchange.svg',
      title:'Hedge with Coral Futures',
      desc:'Trade Bitcoin, Ethereum, and other perpetual with up to 100x leverage on Coral Futures.',
      btn:'Trade Futures'
    },
    {
      image:'assets/images/money.svg',
      title:'Earn Rewards for Trading',
      desc:'Never miss an opportunity for a little competition. Join our latest campaigns to earn rewards.',
      btn:'Join Competition'
    },
  ]
}
