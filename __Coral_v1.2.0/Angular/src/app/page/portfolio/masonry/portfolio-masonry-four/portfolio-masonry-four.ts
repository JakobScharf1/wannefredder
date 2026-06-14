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
  selector: 'app-portfolio-masonry-four',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    LightgalleryModule,
    Footer
  ],
  templateUrl: './portfolio-masonry-four.html',
  styleUrl: './portfolio-masonry-four.scss'
})
export class PortfolioMasonryFour {
  portfolio:PortFolio[] = masonaryData
}
