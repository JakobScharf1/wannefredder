import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

import { Navlight } from "../../../components/navbar/navlight/navlight";
import { AboutImage } from "../../../components/about-image/about-image";
import { ServicesOne } from "../../../components/services-one/services-one";
import { CtaOne } from "../../../components/cta-one/cta-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { TeamOne } from "../../../components/team-one/team-one";
import { FaqOne } from "../../../components/faq-one/faq-one";
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-index-consulting',
  imports: [
    CommonModule,
    RouterLink,
    Navlight,
    AboutImage,
    ServicesOne,
    CtaOne,
    BlogOne,
    TeamOne,
    FaqOne,
    Footer
],
  templateUrl: './index-consulting.html',
  styleUrl: './index-consulting.scss'
})
export class IndexConsulting {
  
}
