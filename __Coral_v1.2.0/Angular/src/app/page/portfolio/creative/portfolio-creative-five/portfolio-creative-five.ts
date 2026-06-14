import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../../components/navbar/navdark/navdark";
import { portfolioData } from '../../../../../data/data';
import { Footer } from "../../../../components/footer/footer";

interface PortFolio{
  id: number;
  image: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-portfolio-creative-five',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
  ],
  templateUrl: './portfolio-creative-five.html',
  styleUrl: './portfolio-creative-five.scss'
})
export class PortfolioCreativeFive {
  portfolioData:PortFolio[] = portfolioData
}
