import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navlight } from "../../../components/navbar/navlight/navlight";
import { masonaryData } from '../../../../data/data';

import { LightgalleryModule } from 'lightgallery/angular';
import { Footer } from "../../../components/footer/footer";

interface Portfolio{
  id: number;
  image: string;
  title: string;
  name: string;
}

@Component({
  selector: 'app-index-minimal-portfolio',
  imports: [
    CommonModule,
    RouterLink,
    Navlight,
    LightgalleryModule,
    Footer
],
  templateUrl: './index-minimal-portfolio.html',
  styleUrl: './index-minimal-portfolio.scss'
})
export class IndexMinimalPortfolio {
  portfolio:Portfolio[] = masonaryData
}
