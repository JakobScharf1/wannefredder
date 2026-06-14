import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogGalleryPost } from './blog-gallery-post';

describe('BlogGalleryPost', () => {
  let component: BlogGalleryPost;
  let fixture: ComponentFixture<BlogGalleryPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogGalleryPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogGalleryPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
