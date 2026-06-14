// @ts-nocheck 
import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NftNavDark } from "../../../components/navbar/nft-nav-dark/nft-nav-dark";
import { nftData } from '../../../../data/data';

import { tns } from 'tiny-slider/src/tiny-slider';
import { NftExplore } from "../../../components/nft-explore/nft-explore";
import { NftCta } from "../../../components/nft-cta/nft-cta";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { Footer } from "../../../components/footer/footer";

interface nft{
  id: number;
  image: string;
  client: string;
  name: string;
  value: string;
  item: string;
  tag: string;
}

@Component({
  selector: 'app-index-nft',
  imports: [
    CommonModule,
    RouterLink,
    NftNavDark,
    NftExplore,
    NftCta,
    BlogOne,
    FaqOne,
    Footer
],
  templateUrl: './index-nft.html',
  styleUrl: './index-nft.scss'
})
export class IndexNft {
  nftData:nft[] = nftData

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

  workData = [
    {
      icon:'zap',
      title:'Create Item',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
      icon:'bookmark',
      title:'Collect',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
    {
      icon:'target',
      title:'Sell Item',
      desc:`Success needs hard work. Don't listen to these 'get rich quick' schemes.`
    },
  ]
}
