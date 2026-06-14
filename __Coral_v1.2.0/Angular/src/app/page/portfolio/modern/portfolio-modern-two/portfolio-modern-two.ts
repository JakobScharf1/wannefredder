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
  selector: 'app-portfolio-modern-two',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './portfolio-modern-two.html',
  styleUrl: './portfolio-modern-two.scss'
})
export class PortfolioModernTwo {
  portfolioData:PortFolio[] = portfolioData
}
