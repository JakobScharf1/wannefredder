import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { blogTag, recentPost } from '../../../../data/data';

interface Post{
  image: string;
  title: string;
  date: string;
}

@Component({
  selector: 'app-sidebar-blog',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './sidebar-blog.html',
  styleUrl: './sidebar-blog.scss'
})
export class SidebarBlog {
  post:Post[] = recentPost
  tag:string[] = blogTag
}
