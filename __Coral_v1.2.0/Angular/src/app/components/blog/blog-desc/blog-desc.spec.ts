import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogDesc } from './blog-desc';

describe('BlogDesc', () => {
  let component: BlogDesc;
  let fixture: ComponentFixture<BlogDesc>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogDesc]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogDesc);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
