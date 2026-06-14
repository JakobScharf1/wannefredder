import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { servicesData } from '../../../../data/data';
import { CtaTwo } from "../../../components/cta-two/cta-two";
import { TeamOne } from "../../../components/team-one/team-one";
import { Footer } from "../../../components/footer/footer";

interface Data {
  icon: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-services',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    CtaTwo,
    TeamOne,
    Footer
],
  templateUrl: './services.html',
  styleUrl: './services.scss'
})
export class Services {
  services:Data[] = servicesData
}
