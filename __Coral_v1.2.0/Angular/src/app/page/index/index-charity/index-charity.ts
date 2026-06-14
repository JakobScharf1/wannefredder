import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { causeData } from '../../../../data/data';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { TeamOne } from "../../../components/team-one/team-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { ServicesOne } from "../../../components/services-one/services-one";
import { Footer } from "../../../components/footer/footer";

interface Causes {
    image: string;
    title: string;
    desc: string;
    progress: string;
    value1: string;
    value2: string;
}

@Component({
  selector: 'app-index-charity',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    CtaTwo,
    TeamOne,
    BlogOne,
    ServicesOne,
    Footer
],
  templateUrl: './index-charity.html',
  styleUrl: './index-charity.scss'
})
export class IndexCharity {
  images: string[] = [
      'assets/images/hero/charity1.jpg',
      'assets/images/hero/charity2.jpg',
      'assets/images/hero/charity3.jpg',
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

  causes:Causes[] = causeData
}
