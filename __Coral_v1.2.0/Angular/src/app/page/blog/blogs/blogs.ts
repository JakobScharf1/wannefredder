import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { blogData } from '../../../../data/data';
import { Footer } from "../../../components/footer/footer";

interface BlogData{
  id: number;
  image: string;
  tag: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-blogs',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    Footer
],
  templateUrl: './blogs.html',
  styleUrl: './blogs.scss'
})
export class Blogs {
  blogData:BlogData[] = blogData
}
