import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from '../../../../components/navbar/navdark/navdark';
import { masonaryData } from '../../../../../data/data';
import { LightgalleryModule } from 'lightgallery/angular';
import { Footer } from "../../../../components/footer/footer";

interface PortFolio{
  id: number;
  image: string;
  title: string;
  name: string;
}

@Component({
  selector: 'app-portfolio-masonry-two',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    LightgalleryModule,
    Footer
],
  templateUrl: './portfolio-masonry-two.html',
  styleUrl: './portfolio-masonry-two.scss'
})
export class PortfolioMasonryTwo {
  portfolio:PortFolio[] = masonaryData
}
