import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { servicesData } from '../../../data/data';

interface Services{
  icon: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-services-one',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './services-one.html',
  styleUrl: './services-one.scss'
})
export class ServicesOne {
  services:Services[] = servicesData.slice(0,3)
}
