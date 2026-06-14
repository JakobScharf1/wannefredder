import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { Navdark } from "../../../components/navbar/navdark/navdark";
import { blogData } from '../../../../data/data';
import { SidebarBlog } from "../../../components/blog/sidebar-blog/sidebar-blog";
import { Footer } from "../../../components/footer/footer";

interface BlogData{
    id: number;
    image: string;
    tag: string;
    title: string;
    desc: string;
}

interface Post{
  image: string;
  title: string;
  date: string;
}

@Component({
  selector: 'app-blog-sidebar',
  imports: [
    CommonModule,
    RouterLink,
    Navdark,
    SidebarBlog,
    Footer
],
  templateUrl: './blog-sidebar.html',
  styleUrl: './blog-sidebar.scss'
})
export class BlogSidebar {
  blogData:BlogData[] = blogData
}
