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
  selector: 'app-portfolio-masonry-six',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    LightgalleryModule,
    Footer
  ],
  templateUrl: './portfolio-masonry-six.html',
  styleUrl: './portfolio-masonry-six.scss'
})
export class PortfolioMasonrySix {
   portfolio:PortFolio[] = masonaryData
}
