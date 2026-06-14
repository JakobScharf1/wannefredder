import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../../components/navbar/navdark/navdark";
import { portfolioData } from '../../../../../data/data';
import { Footer } from "../../../../components/footer/footer";
import { LightgalleryModule } from 'lightgallery/angular';

interface PortFolio{
  id: number;
  image: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-portfolio-modern-four',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer,
    LightgalleryModule
  ],
  templateUrl: './portfolio-modern-four.html',
  styleUrl: './portfolio-modern-four.scss'
})
export class PortfolioModernFour {
  portfolioData:PortFolio[] = portfolioData
}
