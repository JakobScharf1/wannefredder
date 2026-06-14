import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogYoutubePost } from './blog-youtube-post';

describe('BlogYoutubePost', () => {
  let component: BlogYoutubePost;
  let fixture: ComponentFixture<BlogYoutubePost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogYoutubePost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogYoutubePost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
