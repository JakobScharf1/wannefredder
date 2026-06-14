import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../../components/navbar/navdark/navdark";
import { portfolioData } from '../../../../../data/data';
import { Footer } from "../../../../components/footer/footer";
import { LightgalleryModule } from "lightgallery/angular";

interface PortFolio{
  id: number;
  image: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-portfolio-classic-three',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer,
    LightgalleryModule
  ],
  templateUrl: './portfolio-classic-three.html',
  styleUrl: './portfolio-classic-three.scss'
})
export class PortfolioClassicThree {
  portfolioData:PortFolio[] = portfolioData
}
