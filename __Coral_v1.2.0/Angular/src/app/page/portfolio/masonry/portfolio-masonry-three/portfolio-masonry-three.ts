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
  selector: 'app-portfolio-masonry-three',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    LightgalleryModule,
    Footer
  ],
  templateUrl: './portfolio-masonry-three.html',
  styleUrl: './portfolio-masonry-three.scss'
})
export class PortfolioMasonryThree {
  portfolio:PortFolio[] = masonaryData
}
