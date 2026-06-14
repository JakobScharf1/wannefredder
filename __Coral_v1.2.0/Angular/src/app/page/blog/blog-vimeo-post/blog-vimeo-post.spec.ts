import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogVimeoPost } from './blog-vimeo-post';

describe('BlogVimeoPost', () => {
  let component: BlogVimeoPost;
  let fixture: ComponentFixture<BlogVimeoPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogVimeoPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogVimeoPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
