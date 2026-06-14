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
  selector: 'app-portfolio-creative-four',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
  ],
  templateUrl: './portfolio-creative-four.html',
  styleUrl: './portfolio-creative-four.scss'
})
export class PortfolioCreativeFour {
  portfolioData:PortFolio[] = portfolioData
}
