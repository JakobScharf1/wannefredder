import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { masonaryData } from '../../../../data/data';
import { LightgalleryModule } from 'lightgallery/angular';
import { Footer } from "../../../components/footer/footer";

@Component({
  selector: 'app-portfolio-detail-two',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    LightgalleryModule,
    Footer
],
  templateUrl: './portfolio-detail-two.html',
  styleUrl: './portfolio-detail-two.scss'
})
export class PortfolioDetailTwo {
  images = masonaryData.slice(0,8)
}
