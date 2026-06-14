import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

import { Navdark } from "../../../components/navbar/navdark/navdark";
import { ClientOne } from "../../../components/client-one/client-one";
import { BlogOne } from "../../../components/blog-one/blog-one";
import { Footer } from "../../../components/footer/footer";

import { servicesData } from '../../../../data/data';

interface Services{
  icon: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-index-saas',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    ClientOne,
    BlogOne,
    Footer
],
  templateUrl: './index-saas.html',
  styleUrl: './index-saas.scss'
})
export class IndexSaas {
  services:Services[] = servicesData
}
