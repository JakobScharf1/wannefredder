import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { NavBgWhite } from "../../../components/navbar/nav-bg-white/nav-bg-white";
import { servicesData } from '../../../../data/data';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { Footer } from "../../../components/footer/footer";

interface Services{
  icon: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-index-finance',
  imports: [
    CommonModule,
    RouterLink,
    NavBgWhite,
    CtaTwo,
    BlogOne,
    FaqOne,
    Footer
],
  templateUrl: './index-finance.html',
  styleUrl: './index-finance.scss'
})
export class IndexFinance {
  images: string[] = [
    'assets/images/hero/bg1.jpg',
    'assets/images/hero/bg2.jpg',
    'assets/images/hero/bg3.jpg',
  ];

  currentImageIndex: number = 0;
  currentImage: string = this.images[this.currentImageIndex];

  ngOnInit() {
    this.startImageRotation();
  }

  startImageRotation() {
    setInterval(() => {
      this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
      this.currentImage = this.images[this.currentImageIndex];
    }, 5000); // Change image every 5 seconds
  }

  services:Services[] = servicesData.slice(0,4)
}
