import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { clientData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface ClientData{
  tag: string;
  image: string;
  rate: string[];
  desc: string;
  name: string;
  position: string;
}

@Component({
  selector: 'app-testimonial',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './testimonial.html',
  styleUrl: './testimonial.scss'
})
export class Testimonial {
  clientData:ClientData[] = clientData
}
