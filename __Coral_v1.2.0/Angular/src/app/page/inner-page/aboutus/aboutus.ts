import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { AboutImage } from "../../../components/about-image/about-image";
import { counterData } from '../../../../data/data';
import { CountUpModule } from 'ngx-countup';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { TeamOne } from "../../../components/team-one/team-one";
import { Footer } from "../../../components/footer/footer";

interface Counter{
  icon: string;
  title: string;
  value: number;
  symbol: string;
}

@Component({
  selector: 'app-aboutus',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    AboutImage,
    CountUpModule,
    CtaTwo,
    TeamOne,
    Footer
],
  templateUrl: './aboutus.html',
  styleUrl: './aboutus.scss'
})
export class Aboutus {
  counter:Counter[] = counterData
}
