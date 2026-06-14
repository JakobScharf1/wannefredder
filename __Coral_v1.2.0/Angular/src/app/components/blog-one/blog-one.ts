import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { blogData } from '../../../data/data';

interface Blog{
  id: number;
  image: string;
  tag: string;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-blog-one',
  imports: [
    CommonModule,
    RouterLink,
  ],
  templateUrl: './blog-one.html',
  styleUrl: './blog-one.scss'
})
export class BlogOne {
  blogData:Blog[] = blogData.slice(0,3)
}
